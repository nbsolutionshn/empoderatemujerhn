import React, { useEffect } from 'react'
import Modal from 'react-modal'
import styles from './ModalWrapper.module.scss'
const customStyles = {
  overlay: {
    backgroundColor: 'rgba(32, 32, 32, 0.81)',
    zIndex: 199999
  },
  content: {
    top: '50%',
    left: '50%',
    right: 'auto',
    bottom: 'auto',
    marginRight: '-50%',
    transform: 'translate(-50%, -50%)',
    padding: '40px',
    borderRadius: '10px'
  }
}

const ModalWrapper = ({ isOpen, onCloseCallback = null, children }) => {
  const [modalIsOpen, setModalIsOpen] = React.useState(false)
  const closeModal = () => {
    setModalIsOpen(false)
    if (onCloseCallback) {
      onCloseCallback()
    }
  }
  useEffect(() => {
    // If our `isOpen` prop changes we set our local open state value respectively.
    // This allows the user to dismiss our modal by only modifying local state.
    if (isOpen) {
      setModalIsOpen(true)
    }
  }, [isOpen])

  useEffect(() => {
    // Make sure to bind modal to your appElement (http://reactcommunity.org/react-modal/accessibility/)
    // We get window.envatoElements.modalAppHolder from our initial render in main.jsx:
    if (typeof window !== 'undefined' && window.envatoElements && window.envatoElements.modalAppHolder) {
      Modal.setAppElement(window.envatoElements.modalAppHolder)
    }
  })

  return (
    <Modal
      isOpen={modalIsOpen}
      onRequestClose={closeModal}
      style={customStyles}
      contentLabel='Envato Elements'
      data-testid='modal-wrapper'
    >
      <div className={styles.modalInner}>
        <button onClick={closeModal} data-testid='modal-close-button' className={styles.closeButton}>
          <span className={`dashicons dashicons-no-alt ${styles.dismissIcon}`} />
        </button>
        {typeof children === 'function' ? children({ closeModal }) : children}
      </div>
    </Modal>
  )
}

export default ModalWrapper
